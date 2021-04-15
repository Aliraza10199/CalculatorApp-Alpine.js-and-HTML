let screen = document.getElementById('display');
buttons = document.querySelectorAll('button');
let screenValue = '';
for (item of buttons)
{
    item.addEventListener('click', (e) => {
        buttonText = e.target.innerText;
        console.log('Button text is ', buttonText);
        if (buttonText == 'X') {
            buttonText = '*';
            screenValue += buttonText;
            screen.value = screenValue;
        }
        else if (buttonText == 'C') {
            screenValue = "";
            screen.value = screenValue;
        }
        else if (buttonText == 'f'){



            // clear everything on display
            a= screen.value;
            b= factorialize(a);
            screen.value = b;

        }

        else if (buttonText == '=') {
            screen.value = eval(screenValue);
        }

        else {
            screenValue += buttonText;
            screen.value = screenValue;
        }

    })
}


function factorialize(num) {
    if (num < 0)
        return -1;
    else if (num == 0)
        return 1;
    else {
        return (num * factorialize(num - 1));
    }
}

