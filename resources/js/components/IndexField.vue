<template>
    <span>{{ count }}</span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
    computed: {
        values() {
            return this.field.value === null ? [] : this.field.value;
        },

        count() {
            return Object.keys(this.values).length;
        }
    }
}
</script>
