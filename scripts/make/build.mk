OUTPUT_DIR := ./public
SOURCE_DIR := ./src

build: $(OUTPUT_DIR)
	cp -rf $(SOURCE_DIR)/ $(OUTPUT_DIR)/
	cp -rf $(SOURCE_DIR)/pages/ $(OUTPUT_DIR)/
	cp -rf $(SOURCE_DIR)/utils/ $(OUTPUT_DIR)/
	cp -rf $(SOURCE_DIR)/components/ $(OUTPUT_DIR)/


$(OUTPUT_DIR):
	mkdir -p $@
