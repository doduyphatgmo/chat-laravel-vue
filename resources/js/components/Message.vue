<template>
    <!--<div class="container">-->
        <!--<div class="row justify-content-center">-->
            <!--<div class="col-md-8">-->
                <!--<div class="card">-->
                    <!--<div class="card-header">Example Component</div>-->

                    <!--<div class="card-body">-->
                        <!--I'm an example component.-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
    <div>
        <li class="list-group-item" :class='className'><slot></slot></li>
        <small class="badge float-right" :class='badgeCLass'>You</small>
    </div>
</template>

<script>
    export default {
        props: [
            'color'
        ],
        computed: {
          className() {
              return 'list-group-item-'+this.color
          },
          badgeCLass() {
            return 'badge-'+this.color
          },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
