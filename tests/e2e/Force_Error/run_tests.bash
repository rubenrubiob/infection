#!/usr/bin/env bash

set -e pipefail

readonly INFECTION="../../../bin/infection --force-error"

if [ "$DRIVER" = "phpdbg" ]
then
    phpdbg -qrr $INFECTION
else
    php $INFECTION
fi

diff expected-output.txt infection.log

if [ $? == 0 ]
then
    test -x $(which tput) && tput setaf 1 # red
    echo "Infection didn't fail when --force-error was enabled"

    exit 1
fi
