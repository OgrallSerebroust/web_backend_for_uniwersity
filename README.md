# This repository was created at the request of the university. Answers to tasks will be placed here.
## Exercise 1
### + 1) Взять у преподавателя практики ваш логин и пароль доступа к учебному серверу 212.192.134.20 (kubsu-dev.ru). Подключиться к нему по SSH с помощью клиента Putty, команды ssh или онлайн-версии ssh-клиента.
### + 2) С помощью команды ping на учебном сервере узнать IP-адрес веб-сервера kubsu.ru, сделать скриншот вызова команды ping, добавить скриншот в git-репозиторий задания.
![Прилагается скриншот экрана:](screens/for_1_number/Number_2.png?raw=true "Окно программы putty при выполнении задания 2")
### + 3) С помощью команды nslookup узнать A-записи и MX-записи домена kubsu.ru и kubsu-dev.ru, добавить скриншоты в git-репозиторий задания.
![Прилагается скриншот экрана:](screens/for_1_number/Number_3.png?raw=true "Окно программы putty при выполнении задания 3")
### + 4) С помощью команды whois узнать дату регистрации домена kubsu.ru и kubsudev.ru, добавить скриншоты в git-репозиторий задания.
![Прилагается скриншот экрана:](screens/for_1_number/Number_4.png?raw=true "Окно программы putty при выполнении задания 4")
### + 5) Сделать веб-страницу  index.html со скриншотами, добавить ее в git, с помощью SSH склонировать репозиторий со скриншотами и страницей в каталог /var/www/html/ ваш_логин/. Веб-страница должна открываться по адресу http://ваш_логин.kubsudev.ru/каталог_задания_1/.
### + 6) С помощью программы FileZilla или любого другого клиента FTP соединиться с учебным сервером с вашим логином и паролем по протоколу FTP и скопировать на локальный компьютер файлы задания из каталога /var/www/html/ваш_логин/. Сделать скриншот FTP-клиента после скачивания файлов, добавить скриншот в GIT и на страницу.
![Прилагается скриншот экрана:](screens/for_1_number/Number_6.png?raw=true "Окно программы FileZilla при выполнении задания 6")
## Exercise 2
### + Залить файлы в каталоге files на веб-сервер через GIT. Проверить  загрузку файлов в браузере из вашего учебного домена. Проверить работоспособность index.php.
### + С помощью программы telnet или Putty выполнить задания отправкой HTTP-запросов к веб-серверу:
### + 1) Получить главную страницу методом GET в протоколе HTTP 1.0;
![Прилагается скриншот экрана:](web2/1.png?raw=true "Окно программы putty при выполнении задания 1")
### + 2) Получить внутреннюю страницу методом GET в протоколе HTTP 1.1;
![Прилагается скриншот экрана:](web2/2.png?raw=true "Окно программы putty при выполнении задания 2")
### + 3) Определить размер файла file.tar.gz, не скачивая его;
![Прилагается скриншот экрана:](web2/3.png?raw=true "Окно программы putty при выполнении задания 3")
### + 4) Определить медиатип ресурса /image.png;
![Прилагается скриншот экрана:](web2/4.png?raw=true "Окно программы putty при выполнении задания 4")
### + 5) Отправить комментарий на сервер по адресу /index.php;
![Прилагается скриншот экрана:](web2/5.png?raw=true "Окно программы putty при выполнении задания 5")
### + 6) Получить первые 100 байт файла /file.tar.gz;
![Прилагается скриншот экрана:](web2/6.png?raw=true "Окно программы putty при выполнении задания 6")
### + 7) Определить кодировку ресурса /index.php.
![Прилагается скриншот экрана:](web2/7.png?raw=true "Окно программы putty при выполнении задания 7")
### Снять 7 скриншотов, отображающих запрос и заголовки ответа веб-сервера. Сверстать веб-страницу со скриншотами, залить на веб-сервер через GIT.
## Exercise 3
### + Составьте HTML-форму с полями:
- имя (текстовое поле);
- e-mail (текстовое поле);
- год рождения (выбор из списка);
- пол (радиокнопки);
- количество конечностей (радиокнопки);
- сверхспособности: бессмертие, прохождение сквозь стены, левитация (множественный выбор из списка);
- биография (многострочное текстовое поле);
- с контрактом ознакомлен (чекбокс);
- кнопка «Отправить».
### + Оформить страницу красиво с использованием CSS. Предполагается использование верстки из предыдущего семестра.
### + Реализуйте скрипт на веб-сервере на PHP или другом языке программирования, сохраняющий в базу данных MySQL (MariaDB) заполненную форму.
### + До записи необходимо проверить корректность заполнение всех полей на вебсервере. В случае некорректного заполнения отобразить ошибку с описанием проблемы. В случае успешной записи отобразить сообщение о том, что данные успешно сохранены.
### + Для каждой отправки формы необходимо создать отдельную строку с данными в таблице, использовать поле автоинкремент для выдачи уникального идентификатора записи.
### + Для записи в базу данных использовать подготовленные запросы (prepared statements).
## Exercise 4
### + Реализовать проверку корректного заполнения обязательных полей формы предыдущего задания на бекэнде с использованием Cookies.
### Валидацию всех полей формы на бекэнде до сохранения в базу данных необходимо реализовать регулярными выражениями. В случае, если данные содержат недопустимые символы, необходимо сообщить пользователю о том, какие символы допустимо использовать в поле.
### При наличии ошибок страницу формы необходимо перезагрузить методом GET, поля с ошибками подсветить красным цветом, отобразить сообщения с описанием ошибки по каждому полю над формой или рядом с полями формы, вывести в форму ранее введенные пользователем значения. Информацию об ошибочном заполнении полей сохранять в Cookies до конца сессии, удалять при исправлении ошибок пользователем после повторной отправки.
### В случае успешного заполнения формы сохранить значения в Cookies на один год и выводить в форму эти значения в качестве начальных значений полей формы по умолчанию.
### + Использование JavaScript не предполагается.