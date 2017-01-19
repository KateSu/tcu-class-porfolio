1.  set personal data
```
git config --global user.name "KateSu.tzhchi"
git config --global user.email "99514239@"
```

2\.  clone repo tzuchi-class-portfolio
```
git clone git@github.com:KateSu/tzuchi-class-portfolio.git
```

3\.  check and rename remote
```
git remote -v
git remote rename origin tzuchi-class-portfolio
```

4\.  create the ssh key and add it to github repository
```
ssh-keygen -t rsa -f tzuchi-class-portfolio -c "99514239@"

.config
Host github
  HostName github.com
  IdentityFile ~/.ssh/id_rsa_tzuchi-class-portfolio

ssh -T git@github.com
```
http://finfin.github.io/2015/01/17/multiple-git-accounts.html

http://stackoverflow.com/questions/3778042/github-error-cloning-my-private-repository

http://stackoverflow.com/questions/2432764/change-the-uri-url-for-a-remote-git-repository/2432799#2432799

http://webres.wang/best-sublime-text-3-themes-of-2015-and-2016/