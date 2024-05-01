OUTPUT_DIR := ./public
SOURCE_DIR := ./src

build: $(OUTPUT_DIR)
	cp -rf $(SOURCE_DIR)/* $(OUTPUT_DIR)/


$(OUTPUT_DIR):
	mkdir -p $@
