# html2canvas-issue-2881
See https://github.com/niklasvh/html2canvas/issues/2881

## My Findings
I found that `SVG1.svg` and `SVG2.svg` work on both `Chrome 106.0.5249.103 (64-bit) (Offical Build) (Windows 10)` and `Firefox 105.0.3 (64-bit) (Offical Build) (Windows 10)` while `SVG3.svg` doesn't work on the exact same browsers.

## `test.html`
The code that I am using to try to replicate the problem described in https://github.com/niklasvh/html2canvas/issues/2881.

## `SVG*.svg`
The SVGs provided by [@jackturner4416](https://github.com/jackturner4416) to replicate the issue

## `*-console*.txt`
The browser console logs exported to a `.txt` file.

## `HTML2canvas_JS_PHP_code.php`
A minimally modified version of the file `HTML2canvas_JS_PHP_code.php` that [@jackturner4416](https://github.com/jackturner4416) provided.
