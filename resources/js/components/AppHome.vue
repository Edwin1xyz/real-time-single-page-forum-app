<template>
    <div>
        <toolbar></toolbar>
        <app-footer></app-footer>
        <router-view></router-view>
    </div>
</template>

<script>
    import toolbar from './Toolbar'
    import AppFooter from './AppFooter'
    import Login from './login/Login'
    export default {
        components:{toolbar,AppFooter,Login},
    }
</script>

<style>

</style>