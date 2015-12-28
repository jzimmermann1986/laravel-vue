
Vue.component('tasks', {
    template: '#tastks-template',
    data: function () {
        return {
            list: []
        };
    },
    created: function () {
        this.fetchUsersList();
    },
    methods: {
        fetchUsersList: function () {
            this.$resource('api/users/:id').get( function (users) {

                this.list = users;
                console.log(users);
            }.bind(this));
        },
        deleteUser: function (task) {
            this.$resource('api/users/:id').delete({id: task.id}, function (result) {
                this.list.$remove(task);
            }.bind(this));
        }
    }
});
new Vue({
    el: 'body'
});