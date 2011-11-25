set up git
	git config user.name "MeMakeIt"
	git config user.email memakeit@gmail.com

next steps:
	git init
	touch README.md
	git add README.md
	git commit -m 'initial commit'
	git branch 3.2/develop
	git branch 3.2/master
	git checkout 3.2/develop
	git branch -D master
	git remote add origin git@github.com:remakeit/test.git
	git push -u origin HEAD:3.2/develop

directory structure
	kohana
	wordpress



kohana-core-wp
	git clone -b 3.2/master --recurse https://github.com/kohana/core.git kohana-core-wp
	git config user.name "MeMakeIt"
	git config user.email memakeit@gmail.com
	git remote add upstream https://github.com/kohana/core.git
	git fetch upstream


