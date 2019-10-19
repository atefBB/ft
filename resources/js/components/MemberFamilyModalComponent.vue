<template>
    <b-modal
        :id="modal_id"
        :title="model_title"
        centered size="lg">
        <p class="my-4">{{ member_family }}</p>
        <template v-slot:modal-footer="{ ok, cancel, hide }">
           <b-button variant="danger" @click="cancel()">
             {{ i18n_cancel }}
           </b-button>
         </template>
    </b-modal>
</template>

<script>
    export default {
        name: "member-family-modal",
        props: {
            modal_id: String,
            model_title: String,
            member_family: String,
            i18n_cancel: String
        }
    }
</script>
