VERSION=`cat version.md`
FILES=$(wildcard *)

.PHONY: dist

dist: clean
	@echo "packaging..."
	@mkdir Lychee-v$(VERSION)
	@mkdir Lychee-v$(VERSION)/data
	@mkdir Lychee-v$(VERSION)/docs
	@mkdir Lychee-v$(VERSION)/Lychee-front
	@mkdir Lychee-v$(VERSION)/uploads
	@mkdir Lychee-v$(VERSION)/uploads/small
	@mkdir Lychee-v$(VERSION)/uploads/medium
	@mkdir Lychee-v$(VERSION)/uploads/big
	@mkdir Lychee-v$(VERSION)/uploads/thumb
	@mkdir Lychee-v$(VERSION)/uploads/import
	@cp -r data/.gitignore Lychee-v$(VERSION)/data
	@cp -r dist Lychee-v$(VERSION)
	@cp -r docs/* Lychee-v$(VERSION)/docs
	@cp -r Lychee-front/images Lychee-v$(VERSION)/Lychee-front/images
	@cp -r Lychee-front/scripts Lychee-v$(VERSION)/Lychee-front/scripts
	@cp -r Lychee-front/styles Lychee-v$(VERSION)/Lychee-front/styles
	@cp -r Lychee-front/API.md Lychee-v$(VERSION)/Lychee-front
	@cp -r Lychee-front/gulpfile.js Lychee-v$(VERSION)/Lychee-front
	@cp -r Lychee-front/LICENSE Lychee-v$(VERSION)/Lychee-front
	@cp -r Lychee-front/package.json Lychee-v$(VERSION)/Lychee-front
	@cp -r Lychee-front/README.md Lychee-v$(VERSION)/Lychee-front
	@cp -r php Lychee-v$(VERSION)
	@cp -r plugins Lychee-v$(VERSION)
	@cp -r vendor Lychee-v$(VERSION) 2> /dev/null || true
	@cp -r .htaccess Lychee-v$(VERSION)
	@cp -r .user.ini Lychee-v$(VERSION)
	@cp -r CODE_OF_CONDUCT.md Lychee-v$(VERSION)
	@cp -r composer.json Lychee-v$(VERSION)
	@cp -r composer.lock Lychee-v$(VERSION)
	@cp -r favicon.ico Lychee-v$(VERSION)
	@cp -r index.html Lychee-v$(VERSION)
	@cp -r LICENSE Lychee-v$(VERSION)
	@cp -r play-icon.png Lychee-v$(VERSION)
	@cp -r README.md Lychee-v$(VERSION)
	@cp -r robots.txt Lychee-v$(VERSION)
	@cp -r version.md Lychee-v$(VERSION)
	@cp -r view.php Lychee-v$(VERSION)
	@touch Lychee-v$(VERSION)/uploads/big/index.html
	@touch Lychee-v$(VERSION)/uploads/small/index.html
	@touch Lychee-v$(VERSION)/uploads/medium/index.html
	@touch Lychee-v$(VERSION)/uploads/thumb/index.html
	@touch Lychee-v$(VERSION)/uploads/import/index.html
	@zip -r Lychee-v$(VERSION).zip Lychee-v$(VERSION)


contrib_add:
	@echo "npx all-contributors-cli add <user> <bug|code|design|doc|question|tool|test|translation>"

contrib_generate:
	npx all-contributors-cli generate

contrib_check:
	npx all-contributors-cli check

clean:
	@rm -r Lychee-v* 2> /dev/null || true
