/*Import*/
import {loginBtn, registerBtn, loginform, registerform} from "./Elements_Index.js";
/*Import*/ 


/*Controller*/
function controller_Btn_SignUp (){
    loginBtn.style.backgroundColor = "rgba(255, 255, 255, 0.2)";
    registerBtn.style.backgroundColor = "#21264D";

    loginform.style.left = "150%";
    registerform.style.left = "50%";

    loginform.style.opacity = 0;
    registerform.style.opacity = 1;

    document.querySelector(".col-1").style.borderRadius = "0 20% 30% 0";
}
/*Controller*/


/*Declare Global*/
window.controller_Btn_SignUp = controller_Btn_SignUp;
/*Declare Global*/


/*Export*/
export default controller_Btn_SignUp;
/*Export*/