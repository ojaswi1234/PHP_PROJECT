To branch and clone a repository on GitHub web and on the Git CLI, follow these steps:

On GitHub Web:
Branch:

Navigate to your repository.
Click on the "main" branch dropdown.
Type the name of your new branch in the "Find or create a branch" field.
```sh
Click "Create branch: <your-branch-name> from 'main'".
```
Clone:

On your repository's main page, click the green "Code" button.
Copy the URL provided under the "HTTPS" tab.
Open your terminal and run:
sh
```sh
git clone <copied-URL>
```
On Git CLI:
Branch:

Navigate to your local repository in your terminal.
Create and switch to a new branch using:
sh
```sh 
git checkout -b <your-branch-name>
```
Clone:

Open your terminal and run:
sh
```sh
git clone <repository-URL>
 ```
Navigate to the cloned repository: sh
```sh 
cd <repository-name>
 ```
Replace <your-branch-name> and <repository-URL> with your desired branch name and the URL of the repository you want to clone, respectively.
