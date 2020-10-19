# TYPO3 Extension `pfflexslider`

![Build Status](https://github.com/jweiland-net/pfflexslider/workflows/CI/badge.svg)

`pfflexslider` is a TYPO3 Slider Extension based on FlexSlider.

## 1 Features

* Create Sliders based on JS Framework FlexSlider

## 2 Usage

### 2.1 Installation

#### Installation using Composer

The recommended way to install the extension is using Composer.

Run the following command within your Composer based TYPO3 project:

```
composer require jweiland/pfflexslider
```

#### Installation as extension from TYPO3 Extension Repository (TER)

Download and install `pfflexslider` with the extension manager module.

### 2.2 Minimal setup

1) Include the static TypoScript of the extension.
2) Create slider records on a sysfolder.
3) Add pfflexslider plugin on a page and select at least the sysfolder as startingpoint.
