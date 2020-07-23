<template>
    <div class="mt-32">
        <table class="table w-full" v-if="field.value.length">
            <thead>
            <tr>
                <th class="text-left" v-for="heading in Object.keys(field.value.shift())">
                    {{ heading }}
                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="row in field.value">
                <td v-for="column in row">{{ column }}</td>
            </tr>
            </tbody>
        </table>
        <div v-else>No results</div>
    </div>
</template>

<script>
    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],
    }
</script>
