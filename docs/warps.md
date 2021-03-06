Варпы
==========

| Метод | Описание | OA2 |
| ----- | -------- |:---:|
| [GET /warp/:warp/:world/](warps.md#get-warpwarpworld) | Информация о варпе. | - |
| [GET /warps/](warps.md#get-warps) | Информация о варпах. |
| [GET /warps/location/](warps.md#get-warpslocation) | Получение информации о ближайший варпах. | - |
| [GET /warps/player/](warps.md#get-warpsplayer) | Варпы игрока. | - |

# ``` GET /warp/:warp/:world/ ``` 
Информация о варпе.

### Параметры запроса

| Параметры | Необходимость | Пояснение |
| --------- | ------------- | --------- |
| warp      | Обязательно.  | Название варпа. |
| world     | Обязательно.  | Игровой мир. |


### Пример запроса
``` 
http://api.ensemplix.ru/v2/warp/shop/Sandbox/
```
### Пример ответа 
```json 
{ 
  "warp":"shop",
  "x":-3473.39181176403,
  "y":71.0,
  "z":-4324.53344883009,
  "yaw":-182.0,
  "pitch":-4.0,
  "greeting":"§3[От Warp Shop]: §c Внимание..",
  "owner":"nsdp",
  "world":"Sandbox",
  "created":1385965513
}
```
### Пояснение параметров ответа
| Параметры | Пояснение |
| --------- | --------- |
| warp      | Название варпа. |
| x         | Координата расположения варпа по оси X. |
| y         | Координата расположения варпа по оси Y. |
| z         | Координата расположения варпа по оси Z. |
| yaw       | Горизонтальная позиция головы при телепортации на варп. |
| pitch     | Вертикальная позиция головы при телепортации на варп. |
| created   | Время создания варпа в unix timestamp. |
| greeting  | Приветствие при телепортации на варп. |
| created   | Время создания варпа в unix timestamp. |

### Возможные ошибки
| Ошибка | Пояснение |
| ------ | --------- |
| Warp not found. | В радиусе указанных координат нет варпов. |
| Please provide warp. | Необходимо указать варп. |
| Please provide world. | Необходимо указать игровой мир. |

# ``` GET /warps/ ``` 
Список варпов игрока.

### Параметры запроса

| Параметры | Необходимость | Пояснение |
| --------- | ------------- | --------- |
| world     | Опционально.  | Игровой мир. |
| offset    | Опционально.  | Начало выборки варпов. |

### Пример запроса
``` 
http://api.ensemplix.ru/v2/warps/
```
### Пример ответа 
```json 
{"warps":[{
     "warp":"e",
     "x":2990.0,
     "y":63.0,
     "z":0.0,
     "yaw":-180.0,
     "pitch":9.0,
     "greeting":null,
     "owner":"web93onv",
     "world":"CogitoR4",
     "created":1385965513
     }]
}
```
### Пояснение параметров ответа
| Параметры | Пояснение |
| --------- | --------- |
| warp      | Название варпа. |
| x         | Координата расположения варпа по оси X. |
| y         | Координата расположения варпа по оси Y. |
| z         | Координата расположения варпа по оси Z. |
| yaw       | Горизонтальная позиция головы при телепортации на варп. |
| pitch     | Вертикальная позиция головы при телепортации на варп. |
| created   | Время создания варпа в unix timestamp. |
| greeting  | Приветствие при телепортации на варп. |
| created   | Время создания варпа в unix timestamp. |

### Возможные ошибки
| Ошибка | Пояснение |
| ------ | --------- |
| No warps found. | Не были найдены записи о варпах игрока. |

# ``` GET /warps/location/ ``` 
Получение информации о ближайший варпах.

### Параметры запроса

| Параметры | Необходимость | Пояснение |
| --------- | ------------- | --------- |
| x         | Обязательно.  | Координата по оси X. |
| z         | Обязательно.  | Координата по оси Z. |
| world     | Обязательно.  | Игровой мир. |
| offset    | Опционально.  | Начало выборки регионов. |

### Пример запроса
``` 
http://api.ensemplix.ru/v2/warps/location/?x=250&z=250&world=Sandbox
```
### Пример ответа 
```json 
{"warps":[{
     "warp":"JonJoni",
     "x":143.595444049646,
     "y":72.0,
     "z":361.153788018029,
     "yaw":92.0,
     "pitch":-6.0,
     "greeting":"Welcome ",
     "owner":"jonjoni",
     "world":"Sandbox",
     "created":1385965513
    }]
}
```
### Пояснение параметров ответа
| Параметры | Пояснение |
| --------- | --------- |
| warp      | Название варпа. |
| x         | Координата расположения варпа по оси X. |
| y         | Координата расположения варпа по оси Y. |
| z         | Координата расположения варпа по оси Z. |
| yaw       | Горизонтальная позиция головы при телепортации на варп. |
| pitch     | Вертикальная позиция головы при телепортации на варп. |
| created   | Время создания варпа в unix timestamp. |
| greeting  | Приветствие при телепортации на варп. |
| created   | Время создания варпа в unix timestamp. |

### Возможные ошибки
| Ошибка | Пояснение |
| ------ | --------- |
| No warps found. | В радиусе указанных координат нет варпов. |
| Please provide X coordinate. | Необходимо указать координату по оси X. |
| Please provide Z coordinate. | Необходимо указать координату по оси Z. |
| Please provide world. | Необходимо указать игровой мир. |

# ``` GET /warps/player/:player/ ``` 
Список варпов игрока.

### Параметры запроса

| Параметры | Необходимость | Пояснение |
| --------- | ------------- | --------- |
| player    | Обязательно.  | Игровой ник. |

### Пример запроса
``` 
http://api.ensemplix.ru/v2/warps/player/web93onv/
```
### Пример ответа 
```json 
{"warps":[{
     "warp":"e",
     "x":2990.0,
     "y":63.0,
     "z":0.0,
     "yaw":-180.0,
     "pitch":9.0,
     "greeting":null,
     "owner":"web93onv",
     "world":"CogitoR4",
     "created":1385965513
     }]
}
```
### Пояснение параметров ответа
| Параметры | Пояснение |
| --------- | --------- |
| warp      | Название варпа. |
| x         | Координата расположения варпа по оси X. |
| y         | Координата расположения варпа по оси Y. |
| z         | Координата расположения варпа по оси Z. |
| yaw       | Горизонтальная позиция головы при телепортации на варп. |
| pitch     | Вертикальная позиция головы при телепортации на варп. |
| created   | Время создания варпа в unix timestamp. |
| greeting  | Приветствие при телепортации на варп. |
| created   | Время создания варпа в unix timestamp. |

### Возможные ошибки
| Ошибка | Пояснение |
| ------ | --------- |
| No warps found. | Не были найдены записи о варпах игрока. |
| Please provide player. | Необходимо указать игрока. |
