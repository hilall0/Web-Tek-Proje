
            function js_ile_kontrol(){
                let email = document.getElementById("email").value;
                let telNo = document.getElementById("telNo").value;
                let rakamMi = telNo.split("");

                if(!email.includes("@") || !email.includes(".")){
                    alert("Geçerli formatta bir email giriniz!");
                    return false;
                }

                if(document.getElementById("adi").value == "" || document.getElementById("soyadi").value == ""){
                    alert("Adınızı ve soyadınızı giriniz!");
                    return false;
                }
                
                if(telNo == ""){
                    alert("Telefon numaranızı doğru formatta giriniz!");
                    return false;
                }
                else{
                    if(rakamMi[0] != "0"){
                        alert("Telefon numaranız 0 ile başlamalıdır!");
                        return false;
                    }
                    else{
                        for(let i = 0; i<rakamMi.length; i++){
                            if(!("0123456789".includes(rakamMi[i]))){
                                alert("Telefon numaranızı doğru formatta giriniz! Telefon numaranız boşluk içermemeli ve sadece rakam içermeli.");
                                return false;
                            }
                        }
                    }
                }
                
                
                document.getElementById("form1").submit();
                
            }
            

            const { createApp } = Vue;
            createApp({
                data(){
                    return{
                        adi:"",
                        soyadi:"",
                        telNo:"",
                        email:"",

                    };
                },

                methods: {
                    vue_ile_kontrol(){
                        let rakamMi = this.telNo.split("");

                        if(!this.email.includes("@") || !this.email.includes(".")){
                            alert("Geçerli formatta bir email giriniz!");
                            return false;
                        }

                        if(this.adi == "" || this.soyadi == ""){
                            alert("Adınızı ve soyadınızı giriniz!");
                            return false;
                        }

                        if(this.telNo == ""){
                            alert("Telefon numaranızı doğru formatta giriniz!");
                            return false;
                        }
                        else{
                            if(rakamMi[0] != "0"){
                                alert("Telefon numaranız 0 ile başlamalıdır!");
                                return false;
                            }
                            else{
                                for(let i = 0; i<rakamMi.length; i++){
                                    if(!("0123456789".includes(rakamMi[i]))){
                                        alert("Telefon numaranızı doğru formatta giriniz! Telefon numaranız boşluk içermemeli ve sadece rakam içermeli.");
                                        return false;
                                    }
                                }
                            }
                        }
                        
                            document.getElementById("form1").submit();
                    }
                },
                mounted() {
                this.adi = document.getElementById("adi").value;
                this.soyadi = document.getElementById("soyadi").value;
                this.telNo = document.getElementById("telNo").value;
                this.email = document.getElementById("email").value;
                }
            }).mount('#vue')
