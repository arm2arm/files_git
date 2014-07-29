files_git
=========

OwnCloud APP enabling git support for collaborative files_latexeditor


Install
-------
Require 

 * CentOS 6.5 with LAMP.
 * gitolite 
 * OwnCloud 6.x 

On CentOS 6.5:

```bash
  yum -y install git git-core gitolite
  su - gitolite
  git clone git://github.com/sitaramc/gitolite
  mkdir bin
  mkdir keys
  cp from admin server public key gitolite.pub
  gitolite/install -to /var/lib/gitolite/bin
  bin/gitolite setup -pk keys/gitolite.pub
  exit
```

