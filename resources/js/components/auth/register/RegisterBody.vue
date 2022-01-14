<template>
    <div>
        <div class=" w-full xs:max-w-sm xs:mx-auto mx-0 my-5 border px-10 border-gray-300 bg-gray-50">
            <div class="mt-5">
                <h3 class="text-3xl font-bold text-center mb-5 text-gray-800">HandMed-logo</h3>
                <h4 class=" text-base font-bold text-center text-gray-500">Sign up to get full feature of the system.</h4>
            </div>
            
            <!-- social media login -->
            <div class="mt-3">
                <div class="py-2 rounded-lg w-full bg-green-500">
                    <h3 class="text-sm text-white items-center text-center font-semibold">Log in with Google</h3>
                </div>
                <div class="py-2 rounded-lg w-full bg-blue-500 mt-2">
                    <h3 class="text-sm text-center items-center text-white font-semibold">Log in with facebook</h3>
                </div>
            </div>

            <!-- breaker -->
            <div class="flex justify-evenly items-center">
                <div class=" w-2/5  border-t border-gray-400"></div>
                <div>
                    <span class=" text-gray-500 font-semibold">OR</span>
                </div>
                <div class=" w-2/5  border-t border-gray-400"></div>
            </div>

            <div>
                <form action="/" method="POST">
                    
                    <div class="mb-2">
                        <input type="text" @blur="validateName" v-model="registeration.fullname" class="input" name="fullname" required autocomplete  placeholder="Full Name">
                        
                            <span class="name-error text-xs text-red-500"></span>
                        
                    </div>

                    <div class="mb-2">
                        <input type="email" @blur="validateEmail" v-model="registeration.email" class="input" name="email" required autocomplete  placeholder="Email Address">
                        
                            <span class="email-error text-xs text-red-500"></span>
                        
                    </div>

                    <div class="mb-2">
                        <input type="text" @blur="validatePhone" v-model="registeration.phone" class="input" name="phone" required autocomplete  placeholder="Phone Number">
                        
                            <span class="phone-error text-xs text-red-500"></span>
                        
                    </div>

                    <div class="mb-2">
                        <input type="text" @blur="validateUsername" v-model="registeration.username" class="input" name="username" required autocomplete  placeholder="Username">
                        
                            <span class="username-error text-xs text-red-500"></span>
                        
                    </div>

                    <div class="mb-2">
                        <input type="password" @blur="validatePassword" v-model="registeration.password" class="input" name="password" required autocomplete  placeholder="Password">
                        
                            <span class="password-error text-xs text-red-500"></span>
                        
                    </div>

                    <div class="mb-2">
                        <input type="password" @blur="validateConfirmPassword" @keyup.enter="validateConfirmPassword" v-model="registeration.password_confirmation"  class="input" required autocomplete="true" placeholder="Confirm Password">
                        
                            <span class="confirm-error text-xs text-red-500"></span>
                        
                    </div>
                    
                    <button type="submit" @click.prevent="submit" class="py-1 mt-2 w-full text-white bg-blue-600 rounded-lg text-center">Sign up</button>
                </form>
                

                <div class="w-full text-center mt-2">
                    <span class="text-center text-xs text-gray-500 ">
                        By signing up, you agree to our <span class="font-semibold">Terms , Data Policy</span> and <span class=" font-semibold">Cookies Policy .</span>
                    </span>
                </div>
            </div>

            
        </div>
        <div class="w-full xs:max-w-sm xs:mx-auto mx-0 border py-5 mb-3 border-gray-300 mb bg-gray-50">
            <div class="w-full ">
                <h3 class="text-center text-gray-800 text-sm">Have an account <a href="/login" class=" text-blue-600 font-semibold">Login</a></h3>
            </div>
        </div>
    </div>
</template>


<script>

export default {
    
    data(){
        return {
            registeration:{
                fullname:'',
                email:'',
                phone:'',
                username:'',
                password:'',
                password_confirmation:'',

            },
            validate:{
                name:false,
                email:false,
                phone:false,
                username:false,
                password:false,
                password_confirmation:false,
            },
            usernames:null,
            email:''
        }
    },

    

    methods: {
        submit: function(){
            if( this.validateName() && 
                this.validateEmail() &&
                this.validatePhone() &&
                this.validateUsername() && 
                this.validatePassword() &&
                this.validateConfirmPassword()
            ){
                axios.post('/register',this.registeration).then((result) => {
                    if(result.status == 201 ){
                        this.$emit('registered',{id: result.data.id,component:'verify'})
                        
                    }
                }).catch((err) => {
                    
                });
            }else{
                console.log("not validated");
            }
        },
        validateName:function(){
            if(this.registeration.fullname.length < 3 || /[^A-Za-z0-9.-_\s]/.test(this.registeration.fullname)){
                
                $('.name-error').text('Invalid name')
                
                return false;
            }else{
                $('.name-error').text('')
                return true;
            }
        },
        validatePhone: function(){
            if(this.registeration.phone == '' || this.registeration.phone.length >= 9){
                
                $('.phone-error').text('')
                return true;
            }
            
            $('.phone-error').text('Invalid phone number')
            return false;
        },
        validateEmail: function(){
            // var pattern = RegExp("(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])")
            var input_email = this.registeration.email;
            var correct = false;
            if( (input_email.indexOf('.') < 0 || input_email.indexOf('@') < 0) || /[^A-Za-z0-9_.-@]/.test(this.registeration.email) || (input_email.lastIndexOf('.') < input_email.lastIndexOf('@'))){
                correct = false;
                $('.email-error').text("Invalid Email address")
                return false;

            }else{
                correct = true
            }
            axios.get('get-emails').then((result) => {
                var emails = result.data;
                emails.forEach((email) => {
                    if(email.email == this.registeration.email){
                        $('.email-error').text("This email is already taken please try another one")
                        correct = false;
                    }
                    
                });
            }).catch((err) => {
                correct = false
            });


            if(correct == true){
                $('.email-error').text("")
                return true;
            }
            
            return false;

        },
        validatePassword: function(){
            
            if(this.registeration.password.length >= 8){
                $('.password-error').text('');
                return true;
            }
            $('.password-error').text('Your password should be longer than 8 character');
            return false;


        },
        validateConfirmPassword: function(){
            if(this.registeration.password != this.registeration.password_confirmation){
                $('.confirm-error').text('Password doesn\'t match');
                return false;
            }
            $('.confirm-error').text('');
            return true;
        },
        validateUsername: function(){
            var correct = false;
            if(this.registeration.username == ''){
                
                $('.username-error').text('Username should not be empty')
                return false;
            }else if(this.registeration.username.length < 3){
                $('.username-error').text('Invalid Username');
                return false;
            }else if(/[^A-Za-z0-9_.]/.test(this.registeration.username)){
                
                $('.username-error').text('Username can naver contain special character');
                return false;
            }else{
                correct = true;
            }
            axios.get('/get-usernames').then((result) => {
                var usernames = result.data;
                var input_username = this.registeration.username;

                usernames.forEach(element => {
                    if(element.username == input_username){
                        correct = false;
                        $('.username-error').text('This username already taken please try another one.');
                        
                    }
                });
                
                

            }).catch((err) => {
                correct = false
            });

            if(correct == true){
                $('.username-error').text('');
                return true;
            }
            return false;
        }
    }

    
}
</script>