

//  fetch('http://localhost:8000/sanctum/csrf-cookie',{
//   headers:{
//         "Accept":"application/json"
//     }
// }).then(async (res)=>{

//     const formData=new FormData()

//     formData.set('email','doe@doe.com')
//     formData.set('password','doedoe')
//     const xsrf=(await cookieStore.get('XSRF-TOKEN'))?.value as string

//     const response1=await fetch('http://localhost:8000/login',{

//     body:formData,
//     headers:{
//                 "Accept":"application/json",
//                 'X-XSRF-TOKEN':`eyJpdiI6InM0aVJlY1l6Mm1jWFFpSHRCMmVja3c9PSIsInZhbHVlIjoiOUtmOFZHSThoNllRWW1HekhqQWV2ZFR2clpGQkZxRUpuSVdibU1GM0tJalFWWXZ6ZGxYWEpPZkN2TFhFdjZvOGpuVEg5ckhvWC8zcnhWaElmT0U0RExDTGRXOHZUQW1qMmlYaTBxejBhWW1EcVh6eVI5UFljYittZTZvZk4yeHQiLCJtYWMiOiJjN2UyODllYTE3YzE2MDZiNmNhN2QwNzE0ZWRkMzhhOGZmZWY4Y2U4ZTU3ZTYwM2U5OGQ1YjJjYWVkNzg1ZmIyIiwidGFnIjoiIn0=`
//             },
//         method:"POST"
//     })

//     // const data1=await response1.json()

//     // console.log(data1)

//     const response=await fetch('http://localhost:8000/api/user',{
//     headers:{
//                 "Accept":"application/json"

//             },
//     })

//     const data=await response.json()
//     console.log(data)
// })



// /*   method:'POST',
//     headers:{
//         "Accept":"application/json",
//         'X-CSRF-TOKEN':`z0J2m1ikV91Q3DtZMPEHvA4r3Uw0jVMs8yKscrjx`
//     } */
// export {}