.PHONY: version
version:
	@echo "[Composer]"
	@echo ""
	-@sudo docker compose exec dev composer --version
	@echo ""
	@echo "[Laravel]"
	-@sudo docker compose exec dev php artisan about

.PHONY: build-up
build-up:
	-@sudo docker compose up -d --build

.PHONY: up
up:
	-@sudo docker compose up -d

.PHONY: down
down:
	-@sudo docker compose down

.PHONY: serve
serve:
	-@sudo docker compose exec dev php artisan serve --port=8123 --host=0.0.0.0

.PHONY: test
test:
	-@sudo docker compose exec dev php artisan test

.PHONY: test-coverage
test-coverage:
	-@sudo docker compose exec dev php artisan test --coverage

.PHONY: test-profile
test-profile:
	-@sudo docker compose exec dev php artisan test --profile

.PHONY: analyze
analyze:
	@echo "Running analyze.."
