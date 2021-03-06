# euv_custom_popup

JQuery-плагин для вызова кроссбраузерного, адаптивного, стилизованного попапа, размещенного посередине по горизонтали экрана (с учетом скроллбаров различных браузеров), который можно скроллить.

## Поддержка браузерами

Плагин тестировался в браузерах: IE11, Edge 44, Google Chrome 78, Opera 64, FF 70.

## API

#### Инициализация плагина

```
$('.some-popup').euv_custom_popup(arg);
```

где `arg` - необязательный аргумент, который является объектом с настройками:

*   reset_on_close - восстанавливает содержимое попапа после закрытия до того состояния, какое оно было до открытия. Нужно на случай, если пользователь использует один попап для вывода нескольких сообщений и меняет его при открытии.

    Возможные значения: `'none'`, `'clone'`, `'html'`. По умолчанию `'none'`.
    
    Для восстановления содержимого используются соответствующие функции из JQuery (либо вообще не используются - если значение `'none'`).
    
    Важный момент! При использовании `'clone'` обработчики, повешенные на какой-либо элемент внутри попапа, могут восстановиться некорректно (Это связано с работой функции clone. Пример такой ситуации есть в examples.). Поэтому, если данная настройка активирована, вешать обработчики рекомендуется через callback функцию - второй параметр функции `open` (тогда обработчики вешаются прямо перед открытием попапа и убираются после закрытия).

*   mt_percent - `margin-top` в процентах. `50` - середина экрана. `false` - отсутствие выравнивания по вертикали через JS (тогда пользователь может сам задать его через css).

    Возможные значения: число от `0` до `100` или `false`. По умолчанию `50`.

#### Открытие попапа

```
$('.some-popup').euv_custom_popup('open', arg);
```

где `arg` - необязательный аргумент, который является callback-функцией, вызываемой прямо перед открытием попапа (на случай, если используется один попап для вывода разных сообщений - чтобы можно было перед открытием изменить содержимое попапа). Функция принимает параметр `p`, который является открываемым попапом. 

#### Закрытие попапа

```
$('.some-popup').euv_custom_popup('close');
```

#### Уничтожение попапа (возвращение к тому состоянию, которое было до инициализации)

```
$('.some-popup').euv_custom_popup('destroy');
```

## Примеры

Пример подключения и использования можно увидеть в папке examples. А также в репозитории другого моего сайта: [turznanie.ru](https://github.com/ulin-evgeny/turznanie.ru).
