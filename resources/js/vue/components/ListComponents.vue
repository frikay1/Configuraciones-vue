<template>
    <div>
        <h1>
            Post list
            <o-button  @click="clicMe"></o-button>
            <o-field label="email">
                <o-input type="email">

                </o-input>
            </o-field>

        </h1>
    </div>
</template>
<script>
export default{
    methods:{
        clicMe(){
            console.log(this.$axios)
            alert("oruga")

            
        }

    }
}

</script>