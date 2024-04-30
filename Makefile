MAKE_FILES := $(wildcard ./scripts/make/*.mk)

all:

include .env $(MAKE_FILES)

serve: build
	php -S localhost:8080 -t public/


