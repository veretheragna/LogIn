/*Import*/
import {loginBtn, registerBtn, loginform, registerform} from "./Elements_Index.js";
/*Import*/ 


/*Controller*/
function controller_Btn_SignIn(){
    loginBtn.style.backgroundColor = "#21264D";
    registerBtn.style.backgroundColor = "rgba(255, 255, 255, 0.2)";

    loginform.style.left = "50%";
    registerform.style.left = "-50%";

    loginform.style.opacity = 1;
    registerform.style.opacity = 0;

    document.querySelector(".col-1").style.borderRadius = "0 30% 20% 0";
}

/*Controller*/


/*Declare Global*/
window.controller_Btn_SignIn = controller_Btn_SignIn;
/*Declare Global*/


/*Export*/
export default controller_Btn_SignIn;
/*Export*/