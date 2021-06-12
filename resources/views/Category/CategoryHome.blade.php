
@if($Category->count())

<table>
    <tr>
        <td>
            Category _id
        </td>
        <td>
            Category _Name
        </td>
        <td>
            Description
        </td>
        <!-- <td>
            Status
        </td> -->
        <td>
              
        </td>
        <td>
               
        </td>
    </tr>
    @foreach($Category as $categoryItem)
    <tr>
        <td>
            {{$categoryItem->Category_ID }}
        </td>
        <td>
            {{$categoryItem->Category_Name }}
        </td>
        <td>
            {{$categoryItem->Description }}
        </td>
        <!-- <td>
            {{$categoryItem->Status }} 
        </td> -->
        
        <td>
           <a href="/category/{{ $categoryItem->Category_ID}}/edit" > <button  >Edit</button> </a>   
        </td>
        <td>
            <a href="/category/{{$categoryItem->Category_ID}}"><button  >Delete</button>  </a>  
        </td>
    </tr>
    @endforeach
</table>

@else

<h1>No Categories to display</h1>
<h2>Please add Categories</h2>

@endif

<a href="category/create"><button>Add Category</button></a>
    
