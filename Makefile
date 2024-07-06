.PHONY: version
version:
	@echo "[Composer]"
	@echo ""
	-@sudo docker compose exec dev composer diagnose
	@echo ""
	@echo "[Laravel]"
	-@sudo docker compose exec dev php artisan about

.PHONY: serve
serve:
	-@sudo docker compose exec dev php artisan serve --port=8123 --host=0.0.0.0

.PHONY: test
test:
	@echo "Running tests.."

.PHONY: analyze
analyze:
	@echo "Running analyze.."
