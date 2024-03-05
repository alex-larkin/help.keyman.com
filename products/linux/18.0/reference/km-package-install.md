---
title: km-package-install
---
<!-- DO NOT MODIFY THIS FILE!  It was generated by help2md 1.48.4. -->
## Summary

Install a Keyman keyboard package
## Syntax

```bash
km-package-install [-h] [-s] [-f KMPFILE] [-p PACKAGE] [-l LANGTAG] [--force] [--version] [-v] [-vv]
```

### Parameters

`-h`, `--help` <br>
__optional__ <br>
show this help message and exit

`-s`, `--shared` <br>
__optional__ <br>
Install to shared area `/usr/local`

`-f KMPFILE`, `--file KMPFILE` <br>
__optional__ <br>
Keyman kmp file

`-p PACKAGE`, `--package PACKAGE` <br>
__optional__ <br>
Keyman package id

`-l LANGTAG`, `--bcp47 LANGTAG` <br>
__optional__ <br>
bcp47 language tag

`--force` <br>
__optional__ <br>
force installation of keyboard even if it is a
downgrade to an older version of the keyboard

`--version` <br>
__optional__ <br>
show program's version number and exit

`-v`, `--verbose` <br>
__optional__ <br>
verbose logging

`-vv`, `--veryverbose` <br>
__optional__ <br>
very verbose logging

`Example` <br>
__optional__ <br>
: km-package-install -s -p sil_el_ethiopian_latin --bcp47 ssy-latn

## Description

Install a Keyman keyboard package, either a local .kmp file or specify a
keyboard id to download and install, optionally specifying a language for
which to install the keyboard.
## Tab completion


You may use tab completion to find keyboard packages to install.
The list comes from the network so there may be a small delay before
tab completion will work the first time you use it.
The list of packages is cached for one week.

The list is the full list including keyboards that do not work on
Linux, so they won't necessarily install.
## See also

- [`km-config`](km-config)
 <br>
- [`km-package-list-installed`](km-package-list-installed)
 <br>
- [`km-package-uninstall`](km-package-uninstall)