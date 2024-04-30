MAKE_FILES := $(wildcard ./scripts/make/*.mk)

all:

serve:
	php -S localhost:8080 -t public/

include $(MAKE_FILES)

