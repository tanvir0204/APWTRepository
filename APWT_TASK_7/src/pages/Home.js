import { useState, useEffect } from "react"
import http from "../http"
import {Routes, Route, Link} from "react-router-dom";


export default function Home(){
    const[products, setProducts] = useState([]);

    useEffect(() =>{
        fetchAllProducts ();
    },[]);

    const fetchAllProducts = () => {
        http.get('/products').then(res =>{
            setProducts(res.data);
        })
    }

    return (
        <div>
            <h2>Products Listing...</h2>
            <table className="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    {products.map((product,index)=>(
                        <tr key={product.id}>
                            <td>{++index}</td>
                            <td>{product.name}</td>
                            <td>{product.slug}</td>
                            <td>{product.price}</td>
                            <td>   
                                <Link className="btn btn-info" to={{ pathname:"/view/"+product.id}}>View</Link> &nbsp;
                            </td>
                        </tr>

                    ))}
                    

                </tbody>

            </table>
        </div>
    )
}