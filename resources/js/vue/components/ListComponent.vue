<template>
    <div>
        <h1>Iniciar </h1>



         <o-button  @click="clicMe">Comencemos</o-button>
            <o-field label="Email" variant="danger">
                <o-input type="Email" value="fri">

                </o-input>
            </o-field>
    </div>
    
</template>

<script>
export default{
    methods:{
        clicMe(){
            // esto sirve para comprobar si funciona correctamente el axios //console.log(this.$axios)
            alert('oruga')

            
        }

    }
}

</script>