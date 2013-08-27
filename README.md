Ensemplix API
==========

###Внимание! API в разработке и официально не реалиозванно. Указанная документация лишь набросок.

### Начало

Ensemplix старается быть дружелюбным к разработчикам всех направлений и старается придать интерес разработчикам для создания различных приложений, программ, сервисов и т.д с помощью
данных которые у нас есть. Мы избавляем разработчиков от парсинга страниц и предоставляем все данные в JSON формате. Для всех языков проограммиованья существует библиотеки которые помогут быстро
и легко получить данные. В данной рукововодстве описаны все методы для работы, а так же примеры ответов и запроосов. 
Если у Вас есть какие либо идеи или предложения, Вы можете оставить тикет или написать на email support@ensemplix.ru.

#### Версия
2.0

#### OAuth

В данный момент запланирована реализация OAuth 2.0 для приложений. Это позволит существенно расширить количество различных
API для работы. OAuth - позволяет получить доступ к учетной записи пользователя приложению, после подтверждения со стороны игрока,
что он доверяет указанному приложению.

#### Ограничения

В данный момент количество вызовов не ограничено. В будущем планируется ограничесть количество вызовов API за определенный
промежуток времени.

## Предоставляемые методы для работы

Все вызовы осуществляются через домен www.enapi.ru/2.0/

### Миры
| Метод | Описание | OA2 |
| ----- | -------- |:---:|
| [GET /worlds/](worlds.md) | Названия миров. Название миров может отличаться от названия сервера. | - |
| [GET /world/blocks/](worlds.md) | Изменения блоков в мире на указанных координатах. | - |
| [GET /world/warps/](worlds.md) | Получение информации о ближайший варпах. | - |
| [GET /world/region/](worlds.md) | Информация о регионе. | - |

### Игрок

| Метод | Описание | OA2 |
| ----- | -------- |:---:|
| [GET /player/](player.md) | Информация о игроке. | - |
| [GET /player/online/](player.md) | Устанавливает статус игрока в онлайн режим на 15 минут. | + |
| [GET /player/shop/](player.md) | История покупок и продаж игрока в игровом магазине. | - |
| [GET /player/regions/](player.md) | Информация о регионах игрока. | - |
| [GET /player/blocks/](player.md) | Статистика изменений блоков. | - |
| [GET /player/mail/](player.md) | Почта игрока. | + |
| [GET /player/mail/send/](player.md) | Отправить письмо. | + |
| [GET /player/violations/](player.md) | Информация о нарушениях игрока. | - |
| [GET /player/search/](player.md) | Поиск игрока. | - |
| [GET /player/forum/](player.md) | Сообщения на форуме. | - |

### Кланы
| Метод | Описание | OA2 |
| ----- | -------- |:---:|
| [GET /clans/](clans.md) | Список кланов на сервере. | - |
| [GET /clan/](clans.md) | Информация о клане. | - |

### Сервер
| Метод | Описание | OA2 |
| ----- | -------- |:---:|
| [GET /server/online/game/](server.md) | Онлайн на серверах. | - |
| [GET /server/online/web/](server.md) | Онлайн на сайте. | - |
| [GET /server/events/](server.md) | События за последние время на сервере. | - |
| [GET /server/stats/](server.md) | Различная статистика сервера. | - |
| [GET /server/bans/](server.md) | Список забаненных игроков. | - |


### Форум
| Метод | Описание | OA2 |
| ----- | -------- |:---:|
| [GET /forum/topics/](forum.md) | Последние темы на форуме. | - |
| [GET /forum/topic/](forum.md) | Информация о теме. | - |
| [GET /forum/posts/](forum.md) | Последние сообщения на форуме. | - |
| [GET /forum/create/thread/](forum.md) | Создать тему на форуме. | + |
| [GET /forum/create/post/](forum.md) | Создать сообщение на форуме. | + |














