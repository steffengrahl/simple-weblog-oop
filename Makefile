install: install-dependencies install-database
	cp .env.dist .env

install-database:
	rm -f data/db.sqlite
	touch data/db.sqlite
	cat database-structure.sql | sqlite3 data/db.sqlite

install-dependencies:
	php bin/composer install