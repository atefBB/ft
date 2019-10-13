<template>
    <b-modal id="add_member-modal" title="Add member" centered size="lg">
        <b-container fluid>
            <b-row class="mb-1">
              <b-col cols="3">Firstname</b-col>
              <b-col>
                <b-form-input id="firstname" placeholder="Enter your firstname" type="text"></b-form-input>
              </b-col>
            </b-row>
            <b-row class="mb-1">
              <b-col cols="3">Lastname</b-col>
              <b-col>
                <b-form-input id="lastname" placeholder="Enter your lastname" type="text"></b-form-input>
              </b-col>
            </b-row>
            <b-row class="mb-1">
              <b-col cols="3">Birth Date</b-col>
              <b-col>
                <b-form-input id="birth_date" placeholder="Enter your birth date" type="date"></b-form-input>
              </b-col>
            </b-row>
            <b-row class="mb-1">
                <b-col cols="3">Gender</b-col>
                <b-col>
                    <b-form-group>
                      <b-form-radio model="selected" name="gender" value="male">Male</b-form-radio>
                      <b-form-radio model="selected" name="gender" value="female">Female</b-form-radio>
                    </b-form-group>
                </b-col>
            </b-row>
        </b-container>
    </b-modal>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
