<template>
    <div class="badgets-path-vue">
        <span v-for="badget in userBadgets" v-bind:key="badget.index" class="path-node " v-bind:class="[badget.baseClass, badget.status]"><i class="fa fa-plus" aria-hidden="true"></i></span>
        <svg-vue icon="roadmap"></svg-vue>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                userBadgets     : [],
                sessionsGroups  : [],
                cuentSessions   : []
            }
        },
        mounted(){
            console.log("created");
            axios.get("/api/user/28/sessionsgroups/")
            .then(response => {
                console.log(response);
                if(response.status == 200 && response.data){
                    
                    console.log(response.data);
                    this.sessionsGroups = response.data;
                    
                    var tgroups = this.sessionsGroups.length;
                    console.log(tgroups);
                    
                    var agroups = 0;
                    
                    for (const group of this.sessionsGroups) {
                        if(group.status == "Completed"){
                            agroups ++;
                        }
                    }

                    var pgroups = ((agroups * 100) / tgroups ) / 10;

                    var badgets = [];

                    for (let index = 1; index <= 10; index++) {
                        
                        if(pgroups <= index && pgroups > (index - 1) ){
                            badgets.push(
                                {
                                    index       : index,
                                    status      : "active",
                                    baseClass   : "n"+index
                                }
                            );
                        }else if(pgroups > index) {
                            badgets.push(
                                {
                                    index       : index,
                                    status      : "past",
                                    baseClass   : "n"+index
                                }
                            );                        
                        }else{
                            badgets.push(
                                {
                                    index       : index,
                                    status      : "",
                                    baseClass   : "n"+index
                                }
                            );
                        }

                    }

                    console.log(badgets);

                    this.userBadgets = badgets;

                }
            })
            .catch(error => {
                console.log(error);
            });
        },
        beforeUpdate(){
            console.log("Data Changed");
        }
    }
</script>