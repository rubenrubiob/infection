# Force failure when there is a RuntimeError

https://github.com/infection/infection/issues/1997

## Summary

It would be nice to have a CLI option, such as --fail-on-error, that would make infection fail if there is some error in
the execution.
This would be useful when using a CI integration.

To force the error, a PHPUnit's DataProvider is used. However, it only fails when using attributes to set the
DataProvider, i.e., when using PHPUnit > 10.
