`index.php` has been written to ask a random skill testing multiple choice question. Notice that clicking on answers will link to `result.php` with query strings for the the first number in the addition (a), the second number (b), and the proposed answer.

Use these parameters to give feedback to the user. So, for example if the question asked `What is 4 + 5?` and the user clicked on `11`, they would see "No, 4 + 5 is not 11.".

However, if they answered `9` then they would see "Yes, 4 + 5 is 9."

`index.php` is complete and ready. Only `result.php` needs to be edited.

Note: Remember that query strings will always be sent as strings, so be careful to use the appropriate equality operator (=== vs ==) when checking whether the provided answer is correct.