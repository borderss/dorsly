import React, { createContext, useMemo, useState } from "react"
import { useEffect } from "react"

export const CartContext = createContext()

export default function CartContextProvider(props) {
  const defaultCart = {
    items: [],
    total: 0,
    totalItems: 0
  }
  const [cart, setCart] = useState(defaultCart)

  // useEffect(() => {
  // }, [cart])

  const contextValue = useMemo((e) => {
    return {
      cart,
      setCart,
    }
  }, [cart, setCart])

  return (
    <CartContext.Provider value={contextValue}>
      {props.children}
    </CartContext.Provider>
  )
}