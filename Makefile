.PHONY: version
version:
	@echo "[Composer]"
	@echo ""
	-@docker compose exec dev composer --version
	@echo ""
	@echo "[Laravel]"
	-@docker compose exec dev php artisan about

.PHONY: build-up
build-up:
	-@docker compose up -d --build

.PHONY: up
up:
	-@docker compose up -d

.PHONY: down
down:
	-@docker compose down

.PHONY: serve
serve:
	-@docker compose exec dev php artisan serve --port=8123 --host=0.0.0.0

.PHONY: test
test:
	-@docker compose exec dev php artisan test

.PHONY: test-coverage
test-coverage:
	-@docker compose exec dev php artisan test --coverage

.PHONY: test-profile
test-profile:
	-@docker compose exec dev php artisan test --profile

.PHONY: analyze
analyze:
	@echo "Running analyze.."
