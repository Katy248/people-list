OUTPUT_DIR := ./public

build: $(OUTPUT_DIR)
	cp .env $(OUTPUT_DIR)/.env

$(OUTPUT_DIR):
	mkdir -p $@
