<template>
    <b-modal id="add_member-modal" :title="model_title" centered size="lg">
        <b-container fluid>
            <b-row class="mb-1">
              <b-col cols="3">{{ firstname }}</b-col>
              <b-col>
                <b-form-input id="firstname" :placeholder="firstname_placeholder" type="text"></b-form-input>
              </b-col>
            </b-row>
            <b-row class="mb-1">
              <b-col cols="3">{{ lastname }}</b-col>
              <b-col>
                <b-form-input id="lastname" :placeholder="lastname_placeholder" type="text"></b-form-input>
              </b-col>
            </b-row>
            <b-row class="mb-1">
              <b-col cols="3">{{ birth_date }}</b-col>
              <b-col>
                <b-form-input id="birth_date" type="date"></b-form-input>
              </b-col>
            </b-row>
            <b-row class="mb-1">
                <b-col cols="3">{{ gender }}</b-col>
                <b-col>
                    <b-form-group>
                      <b-form-radio model="selected" name="gender" value="male">{{ male }}</b-form-radio>
                      <b-form-radio model="selected" name="gender" value="female">{{ female }}</b-form-radio>
                    </b-form-group>
                </b-col>
            </b-row>
        </b-container>
        <template v-slot:modal-footer="{ cancel }">
            <b-button variant="success" @click="addMember">Add</b-button>
            <b-button variant="danger" @click="cancel()">Cancel</b-button>
        </template>
    </b-modal>
</template>

<script>
    export default {
        props: {
            model_title: String,
            firstname: String,
            lastname: String,
            firstname_placeholder: String,
            lastname_placeholder: String,
            birth_date: String,
            gender: String,
            male: String,
            female: String
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            addMember: () => {
                console.log("Adding member");
            }
        }
    }
</script>
