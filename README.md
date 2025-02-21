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
  
1️⃣ Create a New Branch
sh
Copy
Edit
git checkout -b <new-branch-name>
or

sh
Copy
Edit
git switch -c <new-branch-name>
🔹 This creates and switches to a new branch, keeping the main code untouched.

2️⃣ Add or Modify Files
Edit or add your files, then stage them:

sh
Copy
Edit
git add <file-name>
or to add all changes:

sh
Copy
Edit
git add .
3️⃣ Commit the Changes
sh
Copy
Edit
git commit -m "Added new feature or file"
This saves the changes in the new branch.

4️⃣ Push the New Branch (Optional, if working with GitHub)
sh
Copy
Edit
git push origin <new-branch-name>
🔹 This uploads your new branch to the remote repo without affecting main.

5️⃣ Merge into Main (Later, if needed)
Once your changes are complete and tested, you can merge them into main:

sh
Copy
Edit
git checkout main
git merge <new-branch-name>
If working with GitHub, you can open a Pull Request (PR) instead.
Navigate to the cloned repository: sh
```sh 
cd <repository-name>
 ```
Replace <your-branch-name> and <repository-URL> with your desired branch name and the URL of the repository you want to clone, respectively.
