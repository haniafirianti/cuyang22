<template>
   <div class="row">

        <div class="col-8">
            <div class="card card-default">
                <div class="card-header">
                    Message
                </div>
                <div class="card-body p-0">
                    <ul class="list-unstyled" style="height:300px; overflow-y:scroll">
                        <li class="p-2" v-for="{message, index} in messages" :key="index">
                            <strong> {{ message.user.name }} </strong>
                            {{ message.message }}
                        </li>
                    </ul>
                </div>

                <input  @keyup.enter="sendMessage"
                        type="text"
                        v-model="newMessage"
                        name="message" 
                        placeholder="Enter your Message...."
                        class="form-control">

               
            </div>
                 <span class="text-muted"> User is Typing ...</span>
        </div>

        <div class="col-4">
            <div class="card card-default">
                <div class="card-header"> Active User </div>
                    <div class="card-body">
                        <ul>
                            <li class="py-2">
                                AHMAD
                            </li>                        
                        </ul>
                    </div>

            </div>

        </div>

   </div>
</template>

<script>
export default {
    props:['user'],


    data(){
    return {
            messages: [],
            newMessage: ''
        }
    },

    created(){
        this.fetchMessage();
    },

    methods: {
        fetchMessage(){
            axios.get('messages').then(response => {
                this.messages = response.data;
            });
        }
    },

    sendMessage() {
        this.messages.push({
            user: this.user,
            message: this.Message
        });
        axios.post('messages', { message: this.newMessage});

        this.newMessage = ''
    }
}
</script>
