
# LogSystem Class

LogSystem Class is a little script based from PHP OOP.

## How i use it?

first configuration is:
    -Edit the file conf.inc.php with correct values for:
        1-date_default_timezone_set
        2-$PROJECT_NAME variable

1-Include into your script php instance use: require_once, require, include or include_once.
2-Instance the class like: $log = new LogSystem();
3-Call the method $log->write("message...","name of class or script");


Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)