MAKE_FILES := $(wildcard ./scripts/make/*.mk)
PHONY ?= all serve
all:

include .env $(MAKE_FILES)

serve: 
	php -S localhost:8080 -t ./src 


.PHONY: $(PHONY)


