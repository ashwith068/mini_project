
<script>	

 function showModule() {
        const containerModule = document.querySelector(".container");
        containerModule.style.display = "block";
        localStorage.removeItem('moduleHidden');
    }	
const isModuleHidden = localStorage.getItem('moduleHidden');
    const containerModule = document.querySelector(".container");
 function hideModule() {
        const containerModule = document.querySelector(".container");
        containerModule.style.display = "none";
localStorage.setItem('moduleHidden', true);
    }
if (isModuleHidden) {
        containerModule.style.display = "none";
    }


</script>
