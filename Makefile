install: # установить зависимости
	composer install
brain-games: # запустить приветствие к началу игр
	./bin/brain-games
validate: # проверка composer.json
	composer validate
lint: # проверка синтаксиса
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even: # запуск игры в четность
	./bin/brain-even
brain-calc: # запуск игры в калькулятор
	./bin/brain-calc
brain-prime: # простое число
	./bin/brain-prime
