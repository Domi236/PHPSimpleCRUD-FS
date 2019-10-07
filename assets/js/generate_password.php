
<?php

?>
<script>
    $(document).ready(function (){
        let x = "";
        let y = [];
        let key = "";
        let keyArray = [];

        let objTxt = {
            uppercaseObjText: "",
            lowercaseObjText: "",
            numbersObjText: "",
            specialCharacterObjText: ""
        };

        let obj = {
            uppercase: [],
            lowercase: [],
            numbers: [],
            specialCharacter: []
        };

        let objArr = {
            uppercaseKeyArrayObj : ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'],
            lowercaseKeyArrayObj : ['a','b','c','d','e','f','g','h','i','j','k','l','k','n','o','p','q','r','s','t','u','v','w','x','y','z'],
            numbersKeyArrayObj : ['0','1','2','3','4','5','6','7','8','9'],
            specialCharacterArrayObj : ['!','§','$','%','&','/','(',')','=','?','*','#','+','~','{','}','ß','-']
        };

//if checkbox checked get on character from their array
        function getKeyFrom(objSet, objText, objArray){
            let checkbox = document.getElementById(objSet);
            if(checkbox.checked){
                for (let i = 0; i < 1; i++ ) {
                    objTxt[objText] = objArr[objArray][Math.floor(Math.random() * objArr[objArray].length)];
                }
            }else{
                objTxt[objText] = "";
            }
        }

        //saves one character from each array
        function getSecretKeyFrom(objText) {
            x = objTxt[objText];
        }

//if checkbox checked array get filled
        function getCharacterFrom(objSet, objArray) {
            let checkbox = document.getElementById(objSet);
            if (checkbox.checked) {
                obj[objSet] = objArr[objArray];
            }else {
                obj[objSet] = [];
            }
        }

        //saves array for concatination
        function getArrayFrom(objSet) {
            y = obj[objSet];
        }

// gives the length of the password
        function secretKey(objArray) {
            key = firstcharacter + secondcharacter + thirdcharacter + fourthcharacter;
            let startLength = key.length;
            let lengthKey = $('.password_length').val();
            for (let i = 0; i < (lengthKey - startLength); i++ ) {
                key += keyArray[Math.floor(Math.random() * keyArray.length)];
            }
        }

        $('.generate_one').click(function () {


            getKeyFrom('uppercase', 'uppercaseObjText', 'uppercaseKeyArrayObj');
            getSecretKeyFrom('uppercaseObjText');
            firstcharacter = x;
            getKeyFrom('lowercase', 'lowercaseObjText', 'lowercaseKeyArrayObj');
            getSecretKeyFrom('lowercaseObjText');
            secondcharacter = x;
            getKeyFrom('numbers', 'numbersObjText',  'numbersKeyArrayObj');
            getSecretKeyFrom('numbersObjText');
            thirdcharacter = x;
            getKeyFrom('specialCharacter', 'specialCharacterObjText', 'specialCharacterArrayObj');
            getSecretKeyFrom('specialCharacterObjText');
            fourthcharacter = x;


            getCharacterFrom('uppercase', 'uppercaseKeyArrayObj');
            getArrayFrom('uppercase');
            firstArray = y
            getCharacterFrom('lowercase', 'lowercaseKeyArrayObj');
            getArrayFrom('lowercase');
            secondArray = y
            getCharacterFrom('numbers', 'numbersKeyArrayObj');
            getArrayFrom('numbers');
            thirdArray = y
            getCharacterFrom('specialCharacter', 'specialCharacterArrayObj');
            getArrayFrom('specialCharacter');
            fourthArray = y

            //combine all arrays in one array
            keyArray = firstArray.concat(secondArray, thirdArray, fourthArray);
            secretKey();
            $('.input_password').attr('value', key);
            console.log(key);
        })
    })
</script>
