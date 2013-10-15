<?php

class Api_server {

    /**
     * GET /server/launcher/
     *
     * Версия лаунчера.
     */
    public function actionLauncher() {
        $connection = new Connection();
        $connection = $connection->getGameDatabaseConnection();

        try {
            $statement = $connection->prepare("SELECT `value` as `version` FROM `stats` WHERE `stat` = 'launcher_version' LIMIT 1");
            $statement->execute();
            unset($connection);

            echo json_encode($statement->fetch(PDO::FETCH_ASSOC));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * GET /server/client/
     *
     * Версия сборки клиента.
     */
    public function actionClient() {
        $connection = new Connection();
        $connection = $connection->getGameDatabaseConnection();

        try {
            $statement = $connection->prepare("SELECT `value` as `version` FROM `stats` WHERE `stat` = 'client_version' LIMIT 1");
            $statement->execute();
            unset($connection);

            echo json_encode($statement->fetch(PDO::FETCH_ASSOC));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * GET /server/game/
     *
     * Информация о игровых серверах. Обновление информации о статусе и игроках
     * происходит раз в минуту.
     */
    public function actionGame() {

        try {
            $connection = new Connection();
            $connection = $connection->getGameDatabaseConnection();

            $statement = $connection->prepare("SELECT * FROM `servers`");
            $statement->execute();
            unset($connection);

            $output = array();

            while ($string = $statement->fetch(PDO::FETCH_ASSOC)) {
                $output[]['server'] = $string;
            }

            echo json_encode($output);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * GET /server/news/
     *
     * Последние 5 новостей сервера.
     */
    public function actionNews() {
        try {
            $connection = new Connection();
            $connection = $connection->getGameDatabaseConnection();

            $statement = $connection->prepare("SELECT * FROM `news` ORDER BY `id` DESC LIMIT 5");
            $statement->execute();
            unset($connection);

            $output = array();

            while ($string = $statement->fetch(PDO::FETCH_ASSOC)) {
                $output[]['news'] = $string;
            }

            echo json_encode($output, JSON_UNESCAPED_UNICODE);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
