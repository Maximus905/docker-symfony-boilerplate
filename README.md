### Dockerized symfony project using docker-compose file

**Created with ```composer create-project symfony/skeleton .``` command**

Can be used as boilerplate for symfony project

After clone from git don't forget to copy .env.dist file to .env and run ``` composer install``` for installing all dependencies from composer.json.

To reinstall app delete all content in site folder and run in php container
```composer create-project symfony/skeleton .```

### For creating new project from this use next commands:

* Open Git Bash
* Create a bare clone of the repository.
```
git clone --bare https://github.com/Maximus905/docker-symfony-boilerplate.git 
```
* Mirror-push to the new repository.
```
cd docker-symfony-boilerplate.git
git push --mirror https://github.com/exampleuser/new-repository.git
```
* Remove the temporary local repository you created in step 1.
```
cd ..
rm -rf docker-symfony-boilerplate.git
```
