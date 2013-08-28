Кланы
==========

| Метод | Описание | OA2 |
| ----- | -------- |:---:|
| [GET /clans/](clans.md) | Список кланов на сервере. | - |
| [GET /clan/](clans.md) | Информация о клане. | - |


## ``` GET /clans/ ``` 
Возвращает краткую информацию о всех кланах на сервере.

### Параметры

Параметры не нужны.

### Пример запроса
``` 
http://enapi.ru/clans/
```
### Пример ответа 
```json 
{"clans":{
    "clan":{
       "id":"1",
       "name":"Ensemplix",
       "leader":"eNsirius",
       "members":"35"
       },
    "clan":{
       "id":"2",
       "name":"Hearth of Gold",
       "leader":"Steb",
       "members":"76"
       }
    }
}
```
### Пояснение параметров ответа
| Параметры | Пояснение |
| --------- | --------- |
| id        | Id клана. |
| name      | Название клана. |
| leader    | Лидер клана. |
| members   | Количество человек состоящих в клане. |

## ``` GET /clan/ ``` 
Возвращает подробную информацию о клане по его id.

### Параметры

| Параметры | Пояснение |
| --------- | --------- |
| Id клана  | Уникальный индификатор клана. |

### Пример запроса
``` 
http://enapi.ru/clan/
```
### Пример ответа 
```json 
{"clan":{
     "name":"Yakuza",
     "leader":"IPalexIP",
     "greeting":"Наша группа: http://vk.com/clan_yakuza_minecraft",
     "clan_expirence":"57100",
     "logo":"Yakuza_logo.jpg",
     "members":"35",
     "clan_members":{
          "member":{
              "player":"IPalexIP",
              "joined":"1377671224",
              "expirence":"100"
          },
          "member":{
              "player":"Falgroth",
              "joined":"1377671024",
              "expirence":"500"
          },
          "member":{
              "player":"DragonCHICK",
              "joined":"1377671024",
              "expirence":"56500"
          } 
     }
}
```
### Пояснение параметров ответа
| Параметры | Пояснение |
| --------- | --------- |
| id        | Id клана. |
| name      | Название клана. |
| leader    | Лидер клана. |
| members   | Количество человек состоящих в клане. |













