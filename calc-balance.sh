#!/bin/bash

utxos=(`bitcoin-cli listunspent 6 | jq '.[] | .amount'`)

total=0
for v in ${utxos[@]}; do
  echo $v
  total=`expr $total + $v`
done;
echo $total
