OUTPUT_DIR := ./public

build: $(OUTPUT_DIR)

$(OUTPUT_DIR):
	mkdir -p $@
